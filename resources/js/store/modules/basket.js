export default {
    namespaced: true,
    actions:{
        initFileFolder() {
            axios.get('/api/basket')
                .then(response => {
                    this.commit('basket/files', response.data.files);
                    this.commit('basket/folders', response.data.folders);
                    this.commit('basket/setEmptyFolderPath')
                    this.commit('basket/setEmptySelectedFiles');
                });
        },
        showFolder(state) {
            axios.get('/api/basket/show/'+ state.state.curent_folder.id)
                .then(response => {
                    this.commit('basket/files', response.data.files);
                    this.commit('basket/folders', response.data.folders);
                });
        },
        restoreFiles(state) {
            axios.post('/api/update',{'files': state.state.selectedFiles, 'folders': state.state.selectedFolders})
                .then(response => {
                    this.commit('basket/files', response.data.original.files);
                    this.commit('basket/folders', response.data.original.folders);
                    this.commit('basket/setEmptySelectedFiles');
                });
        },
        deleteFiles(state) {
            axios.post('/api/delete',{'files': state.state.selectedFiles, 'folders': state.state.selectedFolders})
                .then(response => {
                    if (response.status == 200) {
                        this.commit('basket/files', response.data.original.files);
                        this.commit('basket/folders', response.data.original.folders);
                        this.commit('basket/setEmptySelectedFiles');
                    }                    
                });
        },
    },
    mutations:{
        files(state, obj) {
            state.Files = obj;
        },
        folders(state,obj) {
            state.Folders = obj;
        },
        selectFolder(state, obj) {
            let itemIndex = state.selectedFolders.indexOf(obj);
            if( itemIndex === -1) {
                state.selectedFolders.push(obj);
            }
            else{
                state.selectedFolders.splice(itemIndex, 1);
            }
        },
        setEmptySelectedFiles(state) {
            state.selectedFiles = [];
            state.selectedFolders = [];
        },
        setEmptyFolderPath(state) {
            state.folderPath = [];
            state.curent_folder = {
                'name': 'Корзина',
                'id': null
            };
        },
        selectFile(state, obj) {
            let itemIndex = state.selectedFiles.indexOf(obj);
            if( itemIndex === -1) {
                state.selectedFiles.push(obj);
            }
            else {
                state.selectedFiles.splice(itemIndex, 1);
            }
        },
    },
    state:{
        Folders: [
            {
                user: {},
            },
        ],
        Files: [
            {
                file: {
                    user: {

                    }
                },
            },
        ],
        selectedFiles: [],
        selectedFolders: [],
        folderPath: [
            {
                name:'',
                id:'',
            }
        ],
        curent_folder: {
            'name': 'Корзина',
            'id': null
        }
    },
    getters:{
        getFolders(state) {
            return state.Folders
        },
        getFiles(state) {
            return state.Files
        },
        getFolderPath(state) {
            return state.folderPath
        },
        getCurentFolder(state) {
            return state.curent_folder
        },
        getSelectedFiles(state) {
            return state.selectedFiles
        },
        getSelectedFolders(state) {
            return state.selectedFolders
        }

    }
}
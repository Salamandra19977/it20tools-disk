export default {
    namespaced: true,
    actions:{
        initFileFolder() {
            axios.get('/api/disk')
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/folders', response.data.folders);
                    this.commit('disk/setEmptyFolderPath')
                });
        },
        showFolder(state) {
            axios.get('/api/disk/show/'+ state.state.curent_folder.id)
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/folders', response.data.folders);
                });
        }
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
        setEmptyFolderPath(state) {
            state.folderPath = [];
            state.curent_folder = {
                'name': 'Диск',
                'id': null
            };
        },
        openFolder(state, obj) {

            let folder = {
                'name': obj.name,
                'id': obj.id
            };
            state.curent_folder = folder;
            let indexFolderInPath = null;
            for(let item in state.folderPath) {
                if(JSON.stringify(state.folderPath[item])  === JSON.stringify(folder)) {
                    indexFolderInPath = item;
                    break;
                }
            }
            if(indexFolderInPath === null) {
                state.folderPath.push(folder);
                this.dispatch('disk/showFolder');
            }
            else {
                if(indexFolderInPath == Number(state.folderPath.length) - 1) {
                    this.dispatch('disk/showFolder');
                }
                else {
                    state.folderPath.splice(Number(indexFolderInPath) + 1, 9999);
                    this.dispatch('disk/showFolder');
                }
            }
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
                user: {},
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
            'name': 'Диск',
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
        getSelectedFolders(state) {
            return state.selectedFolders
        },
        getSelectedFiles(state) {
            return state.selectedFiles
        }

    }
}

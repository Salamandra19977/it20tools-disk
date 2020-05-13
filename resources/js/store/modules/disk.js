export default {
    namespaced: true,
    actions:{
        initFileFolder() {
            axios.get('/files')
                .then(response => {
                    this.commit('disk/files', response.data)
                });
            axios.get('/folders')
                .then(response => {
                    this.commit('disk/folders', response.data)
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
            let itemtIndex = state.selectedFolders.indexOf(obj);
            if( itemtIndex === -1) {
                state.selectedFolders.push(obj);
            }
            else{
                state.selectedFolders.splice(itemtIndex, 1);
            }
        },
        selectFile(state, obj) {
            let itemtIndex = state.selectedFiles.indexOf(obj);
            if( itemtIndex === -1) {
                state.selectedFiles.push(obj);
            }
            else {
                state.selectedFiles.splice(itemtIndex, 1);
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
    },
    getters:{
        getFolders(state) {
            return state.Folders
        },
        getFiles(state) {
            return state.Files
        },
    }
}
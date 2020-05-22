export default {
    namespaced: true,
    actions:{
        initFileFolder() {
            axios.get('/api/disk')
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/folders', response.data.folders);
                    this.commit('disk/setEmptyFolderPath');
                    this.commit('disk/setEmptySelectedFiles');
                });
        },
        showFolder(state) {
            axios.get('/api/disk/show/'+ state.state.curent_folder.id)
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/folders', response.data.folders);
                    this.commit('disk/setEmptySelectedFiles')
                });
        },
        addLinks(state) {
            axios.post('/api/disk/add/public/links', {
                'file_id': state.state.selectedFiles[0].id,
                'curent_folder': state.state.curent_folder.id
            })
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/setEmptySelectedFiles')
                });
        },
        removeLinks(state) {
            axios.post('/api/disk/remove/public/links', {
                'file_id': state.state.selectedFiles[0].id,
                'curent_folder': state.state.curent_folder.id,
            })
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/setEmptySelectedFiles')
                });
        },
        showAccesses(state) {
            axios.get('/api/disk/show/accesses/'+ state.state.selectedFiles[0].id)
                .then(response => {
                    this.commit('disk/accesses', response.data);
                });
        },
        removeAccesses(state, id) {
            axios.get('/api/disk/remove/accesses/'+ id)
                .then(response => {
                    this.commit('disk/accesses', response.data);
                });
        },
        addAccesses(state, email) {
            axios.post('/api/disk/add/accesses', {
                'email': email,
                'file_id': state.state.selectedFiles[0].id
            })
                .then(response => {
                    this.commit('disk/accesses', response.data);
                })
                .catch(error => {
                    this.commit('disk/errorAccesse', error.response.status);
            });
        },

    },
    mutations:{
        files(state, obj) {
            state.Files = obj;
        },
        folders(state, obj) {
            state.Folders = obj;
        },
        accesses(state, obj) {
            state.Accesses = obj;
        },
        errorAccesse(state, status) {
            if (status === 400){
                state.errorAccesse = "Не удалось найти пользователя с такими данными"
            }
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
            state.selectedFiles = [];
            state.selectedFolders = [];
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
        openLinksModal(state) {
            document.querySelector("#option-copylink-modal").style.display = "block";
            state.showLinksModal = true;
        },
        closeLinksModal(state) {
            document.querySelector("#option-copylink-modal").style.display = "none";
            state.showLinksModal = false;
        },
        openAccessModal(state) {
            this.dispatch('disk/showAccesses');
            document.querySelector("#option-access-modal").style.display = "block";
            state.showAccessModal = true;
            state.errorAccesse = "";
        },
        closeAccessModal(state) {
            state.Accesses = [];
            document.querySelector("#option-access-modal").style.display = "none";
            state.showAccessModal = false;
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
        files: [],
        
        selectedFiles: [],
        Accesses: [
            {
                user: {},
            }
        ],
        selectedFiles: [
            {
                user: {},
            }
        ],
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
        },
        showLinksModal: false,
        showAccessModal: false,
        errorAccesse: "",
    },
    getters:{
        getFolders(state) {
            return state.Folders
        },
        getErrorAccesse(state) {
            return state.errorAccesse
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
        },
        getShowLinksModal(state) {
            return state.showLinksModal
        },
        getshowAccessModal(state) {
            return state.showAccessModal
        },
        getAccesses(state) {
            return state.Accesses
        },
    }
}

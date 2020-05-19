export default {
    namespaced: true,
    actions:{
        initFileFolder() {
            axios.get('/favorites')
                .then(response => {
                    this.commit('favorites/favoriteFiles', response.data.favoriteFiles)
                    this.commit('favorites/favoriteFolders', response.data.favoriteFolders)
                });
        },
        showFolder(state) {
            axios.get('/favorites'+ state.state.curent_folder.id)
                .then(response => {
                    this.commit('disk/files', response.data.files);
                    this.commit('disk/folders', response.data.folders);
                });
        }
    },
    mutations:{
        favoriteFiles(state, obj) {
            state.FavoriteFiles = obj;
        },
        favoriteFolders(state,obj) {
            state.FavoriteFolders = obj;
        },
        selectFavoriteFolders(state, obj) {
            let itemtIndex = state.selectedFavoriteFolders.indexOf(obj);
            if( itemtIndex === -1) {
                state.selectedFavoriteFolders.push(obj);
            }
            else{
                state.selectedFavoriteFolders.splice(itemtIndex, 1);
            }
        },
        selectFavoriteFiles(state, obj) {
            let itemtIndex = state.selectedFavoriteFiles.indexOf(obj);
            if( itemtIndex === -1) {
                state.selectedFavoriteFiles.push(obj);
            }
            else {
                state.selectedFavoriteFiles.splice(itemtIndex, 1);
            }
        },
    },
    state:{
        FavoriteFolders: [
            {
                user: {},
            },
        ],
        FavoriteFiles: [
            {
                user: {},
            },
        ],
        selectedFavoriteFiles: [],
        selectedFavoriteFolders: [],
    },
    getters:{
        getFavoriteFolders(state) {
            return state.FavoriteFolders
        },
        getFavoriteFiles(state) {
            return state.FavoriteFiles
        },
        getFavoriteSelectedFiles(state) {
            return state.selectedFavoriteFiles
        },
        getFavoriteSelectedFolders(state) {
            return state.selectedFavoriteFolders
        }
    }
}
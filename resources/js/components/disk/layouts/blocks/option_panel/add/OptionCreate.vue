<!-- <template>
    <div class="option-create">
        <a href="#" class="option-create__btn" role="button" id="createDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Создать</a>
        <div class="dropdown-menu" aria-labelledby="createDropdown">
            <a class="dropdown-item add-folder" href="#">Папку</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item upload-file" href="#">Загрузить файлы</a>
            <a class="dropdown-item upload-folder" href="#">Загрузить папку</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OptionCreate"
    }
</script>

<style scoped>

</style> -->

<template>
	<div class="option-create">
	    <div>
	        <a href="#" class="option-create__btn" role="button" id="createDropdown" data-toggle="dropdown"
	            aria-haspopup="true" aria-expanded="false">Создать</a>
	        <div class="dropdown-menu" aria-labelledby="createDropdown">
	            <a class="dropdown-item add-folder" href="#">Папку</a>
	            <div class="dropdown-divider"></div>
	            <!-- <a class="dropdown-item upload-file" href="#">Загрузить файлы</a> -->
	            <!-- <a class="dropdown-item upload-folder" href="#">Загрузить папку</a> -->
	            <div class="example-btn">
	                <file-upload
	                  class="dropdown-item upload-file"
	                  post-action="/api/disk/upload"
	                  :accept="accept"
	                  :multiple="multiple"
	                  :directory="directory"
	                  :headers="headers"
	                  :data="data"
	                  :drop="drop"
	                  :response="response"
	                  :drop-directory="dropDirectory"
	                  :add-index="addIndex"
	                  v-model="files"
	                  ref="upload">
	                  <i class="fa fa-plus"></i>
	                  Загрузить файлы
	                </file-upload>
	                <button type="button" class="dropdown-item upload-folder" @click="onAddFolader">Загрузить папку</button>
	        	</div>
	    	</div>
	    </div>
	    <div class="modal fade" id="option-upload-modal" tabindex="-1" role="dialog" aria-labelledby="option-upload-modal"
        aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content uploading">
	                <div class="modal-header">
	                    <span>Загрузка файлов</span>
	                    <div v-show="files.length">
					        <button type="button" class="btn btn-primary" v-if="!$refs.upload || !$refs.upload.active" @click.prevent="$refs.upload.active = true">
					          <i class="fa fa-arrow-up" aria-hidden="true"></i>
					          Загрузить
					        </button>
					        <button type="button" class="btn btn-primary" v-else @click.prevent="$refs.upload.active = false">
					          <i class="fa fa-stop" aria-hidden="true"></i>
					          Остановить
					        </button>
					        <button type="button" class="btn btn-primary" data-dismiss="modal">
					          Закрыть
					        </button>
					        <!-- data-dismiss="modal" -->
					    </div>
	                    <!-- <button class="btn btn-primary" data-dismiss="modal">Отменить</button> -->
	                </div>
	                <div class="modal-body" v-for="(file, index) in files" :key="file.id">
	                    <div class="item item-file">
	                        <div class="info">
	                            <div class="name">
	                                <span>{{file.name}}</span>
	                                <span>{{file.size | convertSize}}</span>
	                            </div>
	                        </div>
	                        
	                        <div class="progress-tooltip">
							    <progress class="progress" :value=file.progress max="100"></progress>
							</div>


	                    </div>
	                </div>

	            </div>
	        </div>
	    </div>
	    <div class="modal fade" id="option-cancelupload-modal" tabindex="-1" role="dialog" aria-labelledby="option-cancelupload-modal"
	        aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="option-cancelupload-modal">Отменить загрузку?</h5>
	                </div>
	                <div class="modal-body"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
	                    <button type="button" class="btn btn-default">Отмена</button>
	                </div>
	            </div>
	        </div>
	    </div>
	    
        <div class="example-drag">
            <div class="upload">
				<!-- <ul v-if="files.length">
					<li v-for="(file, index) in files" :key="file.id">
					  <span>{{file.name}}</span>
					  <div class="progress-tooltip">
					    <progress class="progress" :value=file.progress max="100"></progress>
					  </div>
					  <span>Size: {{file.size | convertSize}}</span>
					  
					  <span v-if="file.error">{{file.error}}</span>
					  <span v-else-if="file.success">Выполнено</span>
					  <span v-else-if="file.active">Загрузка</span>
					  <span v-else></span>
					  <div class="btn-group">
					    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button">
					      Действие
					    </button>
					    <div class="dropdown-menu">
					      <a :class="{'dropdown-item': true, disabled: !file.active}" href="#" @click.prevent="file.active ? $refs.upload.update(file, {error: 'Отменено'}) : false">Отмена</a>

					      <a class="dropdown-item" href="#" v-if="file.active" @click.prevent="$refs.upload.update(file, {active: false})">Отмена</a>
					      <a class="dropdown-item" href="#" v-else-if="file.error && file.error !== 'compressing' && $refs.upload.features.html5" @click.prevent="$refs.upload.update(file, {active: true, error: '', progress: '0.00'})">Повторить попытку</a>
					      <a :class="{'dropdown-item': true, disabled: file.success || file.error === 'compressing'}" href="#" v-else @click.prevent="file.success || file.error === 'compressing' ? false : $refs.upload.update(file, {active: true})">Загрузить</a>

					      <div class="dropdown-divider"></div>
					      <a class="dropdown-item" href="#" @click.prevent="$refs.upload.remove(file)">Удалить</a>
					    </div>
					  </div>
					</li>
				</ul> -->

				<div v-show="$refs.upload && $refs.upload.dropActive" class="drop-active">
					<h3>Загрузить файлы на диск</h3>
				</div>            

            </div>
        </div>

	</div>
</template>

<script>
import FileUpload from 'vue-upload-component'
export default {
    name: "OptionCreate",
    components: {
        FileUpload,
    },
    data() {
        return {
            files: [],
            accept: 'image/png,image/gif,image/jpeg,image/webp',
            extensions: 'gif,jpg,jpeg,png,webp',
            // extensions: ['gif', 'jpg', 'jpeg','png', 'webp'],
            // extensions: /\.(gif|jpe?g|png|webp)$/i,
            minSize: 1024,
            size: 1024 * 1024 * 10,
            multiple: true,
            directory: false,
            drop: true,
            dropDirectory: true,
            addIndex: true,
            thread: 3,
            name: 'file',
            response: 'response',
            postAction: '/api/disk/upload',
            putAction: '/upload/put',
            headers: {
            'X-Csrf-Token': this.token(),
            },
            data: {
            '_csrf_token': this.token(),
            'baseUrl': this.token(),
            },

            autoCompress: 1024 * 1024,
            uploadAuto: false,
            isOption: false,

            addData: {
            show: false,
            name: '',
            type: '',
            content: '',
            },

            editFile: {
            show: false,
            name: '',
            }
        }
    },
    computed: {     
    },
    watch: {
        files: {
            handler(files){
                let dataReload
                for (var i = files.length - 1; i >= 0; i--) {
                    if (files[i].success) {
                        dataReload = files[i].success
                    }
                }
                $('#option-upload-modal').modal();
                
                if (dataReload) {
                    setTimeout(() => { return this.$store.dispatch('disk/initFileFolder')}, 2500)
                }
            },
        },
        name: {
            handler(files){
                for (var i = files.length - 1; i >= 0; i--) {
                }
                console.log(files[i].name)
                return files[i].name

            },
            // setTimeout(handler, 1000)
        }
    },
    methods: {
    	// openConfirmModal() {
	    //   // $('.modal-dialog').click(function() {
	    //   //   $('#option-upload-modal').modal();
	    //   // })
	    //   $('.modal-dialog').click(function() {
	    //   	this.file = 0
	    //    $('#option-cancelupload-modal').modal();
	    //   })
	    // },
	    // openConfirmModal() {
	    // 	$('#option-cancelupload-modal').modal();
	    // },

        // add folader
        onAddFolader() {
            if (!this.$refs.upload.features.directory) {
                this.alert('Your browser does not support')
                return
            }

            let input = this.$refs.upload.$el.querySelector('input')
            input.directory = true
            input.webkitdirectory = true
            this.directory = true

            input.onclick = null
            input.click()
            input.onclick = (e) => {
                this.directory = false
                input.directory = false
                input.webkitdirectory = false
            }
        },
        onEditFileShow(file) {
            this.editFile = { ...file, show: true }
            this.$refs.upload.update(file, { error: 'edit' })
        },
        token() {
            let token = document.head.querySelector('meta[name="csrf-token"]');

            if (token) {
                  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
                } else {
                 console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
                }
            return token.content;
        },
    }
}
</script>

<style>
.modal .uploading .modal-header {
  border-bottom: 1px solid #f5f5f5;
}

.modal .uploading .item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 10px 0;
}

.modal .uploading .item i {
  display: inline-block;
  width: 30px;
  height: 30px;
  margin-right: 15px;
}

.modal .uploading .item-file i {
  /*background: url("../img/ic_insert_drive_file.svg");*/
}

.modal .uploading .item-folder i {
  /*background: url("../img/ic_folder.svg");*/
}

.modal .uploading .info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.modal .uploading .name {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.modal .uploading .name span:first-child {
  font-size: 13px;
  color: #999;
}

.modal .uploading .name span:nth-child(2) {
  font-size: 14px;
  color: #333;
}

.modal .uploading .progress {
  width: 185px;
  height: 5px;
}
/*.progress {
  -moz-appearance: none;
  -webkit-appearance: none;
  border: none;
  border-radius: $progress-border-radius;
  display: block;
  font-family: $progress-font-family;
  height: 5px;
  background-color: blue;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 100%  ;
}*/
.btn-group .dropdown-menu {
  display: block;
  visibility: hidden;
  transition: all .2s
}
.btn-group:hover > .dropdown-menu {
  visibility: visible;
}

label.dropdown-item {
  margin-bottom: 0;
}

.btn-group .dropdown-toggle {
  margin-right: .6rem
}

 .filename {
  margin-bottom: .3rem
}

 .btn-is-option {
  margin-top: 0.25rem;
}
 .example-foorer {
  padding: .5rem 0;
  border-top: 1px solid #e9ecef;
  border-bottom: 1px solid #e9ecef;
}


 .edit-image img {
  max-width: 100%;
}

 .edit-image-tool {
  margin-top: .6rem;
}

 .edit-image-tool .btn-group{
  margin-right: .6rem;
}

 .footer-status {
  padding-top: .4rem;
}

 .drop-active {
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  position: fixed;
  z-index: 9999;
  opacity: .6;
  text-align: center;
  background: #000;
}

 .drop-active h3 {
  margin: -.5em 0 0;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-size: 40px;
  color: #fff;
  padding: 0;
}
</style>
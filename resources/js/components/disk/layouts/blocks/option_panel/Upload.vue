<template>
  <div class="example-drag">
    <div class="upload">
      <ul v-if="files.length">
        <li v-for="(file, index) in files" :key="file.id">
          <span>{{file.name}}</span> -
          <span>PROGRESS: {{file.progress}}</span> -
          <span>{{file.size | convertSize}}</span> -
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button">
              Action
            </button>
            <div class="dropdown-menu">
              <a :class="{'dropdown-item': true, disabled: !file.active}" href="#" @click.prevent="file.active ? $refs.upload.update(file, {error: 'Отменено'}) : false">Отмена</a>

              <a class="dropdown-item" href="#" v-if="file.active" @click.prevent="$refs.upload.update(file, {active: false})">Abort</a>
              <a class="dropdown-item" href="#" v-else-if="file.error && file.error !== 'compressing' && $refs.upload.features.html5" @click.prevent="$refs.upload.update(file, {active: true, error: '', progress: '0.00'})">Повторить попытку</a>
              <a :class="{'dropdown-item': true, disabled: file.success || file.error === 'compressing'}" href="#" v-else @click.prevent="file.success || file.error === 'compressing' ? false : $refs.upload.update(file, {active: true})">Загрузить</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" @click.prevent="$refs.upload.remove(file)">Удалить</a>
            </div>
          </div>
          <span v-if="file.error">{{file.error}}</span>
          <span v-else-if="file.success">Выполнено</span>
          <span v-else-if="file.active">Загрузка</span>
          <span v-else></span>
        </li>
      </ul>

      <div v-show="$refs.upload && $refs.upload.dropActive" class="drop-active">
        <h3>Загрузить файлы на диск</h3>
      </div>
      <div class="example-btn">
        <file-upload
          class="btn btn-primary"
          post-action="/api/disk/upload"
          :accept="accept"
          :multiple="multiple"
          :directory="directory"
          :headers="headers"
          :data="data"
          :drop="drop"
          :drop-directory="dropDirectory"
          :add-index="addIndex"
          v-model="files"
          ref="upload">
          <i class="fa fa-plus"></i>
          Select files
        </file-upload>

        <button type="button" class="btn btn-primary" @click="onAddFolader">Add folder</button><br /><br />
        <button type="button" class="btn btn-success" v-if="!$refs.upload || !$refs.upload.active" @click.prevent="$refs.upload.active = true">
          <i class="fa fa-arrow-up" aria-hidden="true"></i>
          Start Upload
        </button>
        <button type="button" class="btn btn-danger"  v-else @click.prevent="$refs.upload.active = false">
          <i class="fa fa-stop" aria-hidden="true"></i>
          Stop Upload
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import FileUpload from 'vue-upload-component'
export default {
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
      addIndex: false,
      thread: 3,
      name: 'file',
      postAction: '/api/disk/upload',
      putAction: '/upload/put',
      headers: {
        'X-Csrf-Token': this.token(),
      },
      data: {
        '_csrf_token': this.token(),
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
  methods: {
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
        console.log(token.content)
        // window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
        // window.axios = require('axios');

        // window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        // token = document.head.querySelector('meta[name="csrf-token"]');
        // console.log(token)

        return token.content;
      },
  }
}
</script>

<style>
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
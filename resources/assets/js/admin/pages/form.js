require('./../admin-app');

// Tinymce
require('./../lib/tinymce/tinymce.min.js');

// Left menu
Vue.component(
	'admin-left-menu', 
	require('./../components/admin-menus/AdminLeftMenu.vue')
);

// Top menu
Vue.component(
    'admin-top-menu', 
    require('./../components/admin-menus/AdminLTopMenu.vue')
);

const adminApp = new Vue({
    el: '#admin-app',
    data: {
    	isLeftMenuClose: false,
    },
    methods: {
    	updateLeftNavToggle(eventData){
    		this.isLeftMenuClose = eventData;
    	}
    },
    created(){
        /**
         * Enable WYSIWYG Editor
         * https://www.tinymce.com/docs/get-started/
         */
        tinymce.init({
            selector: '#admin-editor',
            theme: "modern",
            toolbar1: 'formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code',
            toolbar2: 'link table forecolor backcolor | undo redo',
            menubar: false,
            plugins: 'lists table textcolor link wordcount code',
            branding: false,
            height : "250",
            width : "100%"
        });
    }
});
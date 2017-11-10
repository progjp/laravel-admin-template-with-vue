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

// Form Page Fields
Vue.component(
    'admin-form-fields', 
    require('./../components/form/FormFields.vue')
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
    }
});
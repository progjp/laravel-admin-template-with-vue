require('./../admin-app');

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
    		// console.log(eventData, this["is-left-menu-close"]);
    		this.isLeftMenuClose = eventData;
    		console.log(this.isLeftMenuClose);
    	}
    }
});
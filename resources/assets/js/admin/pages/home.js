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

// Admin home page top content
Vue.component(
    'admin-home-top', 
    require('./../components/home/HomeTop.vue')
);

// Admin home page top content
Vue.component(
	'admin-home-bottom', 
	require('./../components/home/HomeBottom.vue')
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
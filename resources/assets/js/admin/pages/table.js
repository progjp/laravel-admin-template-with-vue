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

// Posts table
Vue.component(
    'posts-table', 
    require('./../components/table/PostsTable.vue')
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
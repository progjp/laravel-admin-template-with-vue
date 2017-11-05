<template>
	<nav class="admin-panel-top-menu navbar">
		<ul class="top-menu-left-list navbar-start">
	        <li>
	        	<a href="#" class="page-navigation-toggle" v-on:click="toggleNavigation($event)">
	        		<span class="fa fa-bars"></span>
	        	</a>
	        </li>
	        <li class="adminhead-visitsite"><a href="/">Visit site</a></li>
	    </ul>

	    <div class="top-menu-profile-info navbar-end">
	    	<div class="mini-profile level-right">
	    		<div class="level-item">
	    			<img src="/images/admin/user-small.jpg" alt="User" class="user-small-img">
	    		</div>
	    		<div class="mini-profile-text level-item">
	    			<div>
		    			<a href="#">Howdy, John Doe</a>
		    			<span>Administrator</span>
	    			</div>
	    		</div>
	    		<div class="mini-profile-menu level-item">
	    			<a href="#" class="dropdown-menu-trigger"><i class="fa fa-cog"></i></a>
	    			<ul class="dropdown-menu">
	                    <li class="dropdown-header">Profile Menu</li>
	                    <li><a href="#">Messages</a></li>                                    
	                    <li><a href="#">Statistics</a></li>
	                    <li><a href="#">Changelog</a></li>
	                    <li><a href="#">Settings</a></li>
	                    <li class="divider"></li>
	                    <li><a href="#">Logout</a></li>
	                </ul>
	    		</div>
	    	</div>
	    </div>
	</nav>
</template>

<script>
    export default {
        mounted() {
            console.log(this.isLeftMenuClose);
        },
        data: () => ({
    		
    	}),
        methods: {
        	toggleNavigation(event){
        		event.preventDefault();
        		event.stopPropagation();

        		this.isLeftMenuClose = !this.isLeftMenuClose;
        		console.log(this.isLeftMenuClose);
        	}
        }
    }
</script>
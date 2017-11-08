<template>
	<div class="admin-panel-left-menu">
		<div class="admin-panel-name">
	        <a href="/admin" class="logo">Blog Admin</a>
	    </div>

	    <vue-scrollbar :style="scrollbarStyle" ref="Scrollbar">
		    <ul class="laft-navigation">
		    	<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		    	<li><a href="#"><i class="fa fa-pencil"></i> Posts</a></li>
		    	<li><a href="#"><i class="fa fa-table"></i> Table</a></li>
		    	<li class="left-navigation-has-submenu open">
		    		<a href="#" v-on:click="leftNavOpenDropdowns($event)"><i class="fa fa-map-marker"></i> Dropdown</a>
		    		<ul class="left-navigation-dropdown">
		    			<li><a href="#">Dropdown One</a></li>
		    			<li class="active"><a href="#">Dropdown Two</a></li>
		    			<li><a href="#"><i class="fa fa-dollar"></i> Dropdown Three</a></li>
		    		</ul>
		    	</li>
		    	<li class="left-navigation-has-submenu">
		    		<a href="#" v-on:click="leftNavOpenDropdowns($event)"><i class="fa fa-map-marker"></i> Another Dropdown</a>
		    		<ul class="left-navigation-dropdown">
		    			<li><a href="#">Dropdown One</a></li>
		    			<li><a href="#">Dropdown Two</a></li>
		    			<li><a href="#"><i class="fa fa-dollar"></i> Dropdown Three</a></li>
		    		</ul>
		    	</li>
		    </ul>
	    </vue-scrollbar>

	</div>
</template>

<script>
	import VueScrollbar from 'vue2-scrollbar';
	// require("vue2-scrollbar/style/vue2-scrollbar.css");

    export default {
    	components: { 
    		'vue-scrollbar': VueScrollbar 
    	},
    	data: () => ({
    		scrollbarStyle: {maxHeight: "100vh"}
    	}),
        methods: {
            leftNavOpenDropdowns(event){
        		event.preventDefault();
        		event.stopPropagation();
        		let clickedLi = event.path[1];
        		let liIsOpen = clickedLi.classList.contains('open');
        		
        		if(liIsOpen){
        			clickedLi.classList.remove('open');
        		}else{
        			clickedLi.classList.add('open');
        		}
            },
            handleResize(){
            	let scrollBoxHeight = window.innerHeight - 50;
            	console.log(scrollBoxHeight);
            }
        },
        mounted(){
        	// this.$refs.Scrollbar.scrollToX(100);
        	// let menuHeight = this.$refs.Scrollbar.$el.clientHeight;
        	// this.scrollbarStyle.maxHeight = menuHeight+'px';
        	// this.scrollbarStyle.maxHeight = '100vh';
		},
		ready: function () {
			window.addEventListener('resize', this.handleResize)
		},
		beforeDestroy: function () {
			window.removeEventListener('resize', this.handleResize)
		}
    }
</script>
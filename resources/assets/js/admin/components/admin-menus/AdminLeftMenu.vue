<template>
	<div class="admin-panel-left-menu">
		<div class="admin-panel-name">
	        <a href="/admin" class="logo">Blog Admin</a>
	    </div>

	    <vue-scrollbar :style="scrollbarStyle" ref="Scrollbar">
		    <ul class="laft-navigation">
		    	<li class="active"><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		    	<li><a href="/table"><i class="fa fa-pencil"></i> Posts</a></li>
		    	<li><a href="/table"><i class="fa fa-table"></i> Table</a></li>
		    	<li><a href="/form"><i class="fa fa-wpforms"></i> Form</a></li>
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

    export default {
    	components: { 
    		'vue-scrollbar': VueScrollbar 
    	},
    	data: () => ({
    		scrollbarStyle: {
    			maxHeight: "80vh",
    			minHeight: "50vh"
    		}
    	}),
        methods: {
            leftNavOpenDropdowns(event){
        		event.preventDefault();
        		let clickedLi = event.target.parentElement;
        		let liIsOpen = clickedLi.classList.contains('open');
        		if(liIsOpen){
        			clickedLi.classList.remove('open');
        		}else{
        			clickedLi.classList.add('open');
        		}
            },
            handleResize(){
            	let scrollBoxHeight = window.innerHeight - 70;
            	this.scrollbarStyle.maxHeight = scrollBoxHeight+'px';
            	this.scrollbarStyle.minHeight = scrollBoxHeight+'px';
            	this.$refs.Scrollbar.scrollToY(0);
            }
        },
        mounted(){
        	let scrollBoxHeight = window.innerHeight - 70;
        	this.scrollbarStyle.maxHeight = scrollBoxHeight+'px';
        	this.scrollbarStyle.minHeight = scrollBoxHeight+'px';
		},
		created(){
			window.addEventListener('resize', this.handleResize)
		},
		beforeDestroy(){
			window.removeEventListener('resize', this.handleResize)
		}
    }
</script>
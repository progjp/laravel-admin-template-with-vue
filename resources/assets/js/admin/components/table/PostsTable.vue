<template>
	<div class="card table-list-card">
		<div class="table-several-actions">
			<div class="card-header">
				<div class="card-header-title">
					<ul class="table-rows-count-menu">
						<li class="active"><a href="#">All <span class="count">(5)</span></a></li>
						<li class=""><a href="#">Published <span class="count">(4)</span></a></li>
						<li class=""><a href="#">Draft <span class="count">(1)</span></a></li>
						<li class=""><a href="#">Trash <span class="count">(1)</span></a></li>
					</ul>
				</div>
				<div class="card-header-icon">
					<div class="table-result-search-form">
						<div class="field has-addons">
							<div class="control">
								<input class="input is-small" type="text" placeholder="Find a post">
							</div>
							<div class="control">
								<button class="button is-info is-small" type="button">
									Search
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="table-several-actions">
			<div class="card-header">
				<div class="card-header-title">
					<div class="field is-grouped">
						<p class="control small-margin">
							<span class="select is-small">
								<select>
									<option value="-1">Bulk Actions</option>
									<option value="trash">Move to Trash</option>
									<option value="delete">Delete</option>
								</select>
							</span>
						</p>
						<p class="control">
							<button class="button is-small" type="button">
								Apply
							</button>
						</p>

						<p class="control small-margin">
							<span class="select is-small">
								<select>
									<option value="-1">All dates</option>
									<option value="">June</option>
									<option value="">July</option>
									<option value="">August</option>
									<option value="">September</option>
								</select>
							</span>
						</p>
						<p class="control small-margin">
							<span class="select is-small">
								<select>
									<option value="-1">All Categories</option>
									<option value="">HTML</option>
									<option value="">CSS</option>
									<option value="">PHP</option>
								</select>
							</span>
						</p>
						<p class="control">
							<button class="button is-small" type="button">
								Filter
							</button>
						</p>
					</div>
				</div>
				<div class="card-header-icon">
					<span class="list-total-items">1000 items</span>
					<nav class="pagination is-centered is-small">
						<a class="pagination-previous">Previous</a>
						<a class="pagination-next">Next</a>
						<ul class="pagination-list">
							<li><a class="pagination-link">1</a></li>
							<li><span class="pagination-ellipsis">&hellip;</span></li>
							<li><a class="pagination-link">45</a></li>
							<li><a class="pagination-link is-current">46</a></li>
							<li><a class="pagination-link">47</a></li>
							<li><span class="pagination-ellipsis">&hellip;</span></li>
							<li><a class="pagination-link">86</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
			
		<div class="card-table-content">
			<table class="table is-striped is-fullwidth is-hoverable">
                <thead>
                    <tr>
                        <th class="checkbox-column">
                        	<input type="checkbox" v-model="checkedAllBulk" value="1" v-on:change="changedAllBulk">
                        </th>
                        <th class="id-column">ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th class="status-column">Status</th>
                        <th class="action-column">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="post in posts">
                        <td><input type="checkbox" v-model="bulkActionIds" v-bind:value="post.id"></td>
                        <td>{{ post.id }}</td>
                        <td>Dmitry</td>
                        <td>Ivaniuk</td>
                        <td>dvaniuk</td>
                        <td>Published</td>
                        <td class="action-cell">
                        	<div class="buttons">
                            	<a href="#" class="button is-primary is-small" title="Edit"><i class="fa fa-pencil"></i></a>
                            	<a href="#" class="button is-success is-small" title="View"><i class="fa fa-external-link"></i></a>
                            	<a href="#" class="button is-danger is-small" title="Trash"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
		</div>

	</div>
</template>

<script>
	export default {
		data: () => ({
			checkedAllBulk: 0,
			bulkActionIds: [],
			posts: [
				{"id": 1},
				{"id": 2},
				{"id": 6},
				{"id": 4},
				{"id": 5},
				{"id": 8}
			]
		}),
		methods: {
			changedAllBulk(){
				var loopActionIds = [];
				if(this.checkedAllBulk){
					this.posts.map(function(value, key){
						loopActionIds.push(value.id);
					});
					this.bulkActionIds = loopActionIds;
				}else{
					this.bulkActionIds = loopActionIds;
				}
			}
		}
	}
</script>
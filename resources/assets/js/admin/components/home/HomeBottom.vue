<template>
	<div class="columns">
		<div class="column">
			<div class="card">
				<header class="card-header">
					<p class="card-header-title">
						Component
					</p>
					<div class="card-header-icon">
						<a class="button is-info is-small" href="#"><i class="fa fa-eye"></i> View All</a>
					</div>
				</header>
				<div class="card-content">
					<table class="table is-bordered is-striped is-fullwidth">
	                    <thead>
	                        <tr>
	                            <th>Payee name</th>
	                            <th>Description</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>Angelina Jolie</td>
	                            <td>Dont forget about fee</td>
	                        </tr>
	                        <tr>
	                            <td>Angelina Jolie</td>
	                            <td>Dont forget about fee</td>
	                        </tr>
	                        <tr>
	                            <td>Angelina Jolie</td>
	                            <td>Dont forget about fee</td>
	                        </tr>
	                        <tr>
	                            <td>Angelina Jolie</td>
	                            <td>Dont forget about fee</td>
	                        </tr>
	                        <tr>
	                            <td>Angelina Jolie</td>
	                            <td>Dont forget about fee</td>
	                        </tr>
	                    </tbody>
	                </table>
				</div>
			</div>
		</div>
		<div class="column">
			<form class="admin-homepage-form card" method="post">
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" type="text" placeholder="e.g Alex Smith">
					</div>
				</div>
				<div class="field">
					<label class="label">Message</label>
					<div class="control">
						<textarea class="textarea" placeholder="Textarea"></textarea>
					</div>
				</div>
				<div class="field">
					<div class="control">
						<button class="button is-info is-small" type="button">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>
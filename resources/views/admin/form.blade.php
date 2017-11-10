@extends('admin.layouts.master')

@section('title', 'Admin Home')

@section('content')

	<div class="page-headings">
		<div class="page-heading-block">
	        <h1 class="page-heading-title">Dashboard</h1>
	        <h3 class="page-heading-subtitle">Exclusive responsive dashboard</h3>
	    </div>
	    <ul class="breadcrumb-block">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Default</li>
        </ul>
    </div>

	<div class="page-main-content form-page-content">

		<div class="columns">
			<div class="column is-9-desktop is-7-tablet">
				<div class="card form-fields">
					<div class="card-content">
						<div class="field">
							<label class="label">Title</label>
							<div class="control">
								<input class="input" type="text" placeholder="Title">
							</div>
						</div>

						<div class="field admin-editor-field">
							<div class="control">
								<textarea id="admin-editor"></textarea>
							</div>
						</div>

						<div class="field">
							<label class="label">Valid Field</label>
							<div class="control has-icons-right">
								<input class="input is-success" type="text" placeholder="Text input" value="bulma">
								<span class="icon is-small is-right">
									<i class="fa fa-check"></i>
								</span>
							</div>
							<p class="help is-success">This valid is data</p>
						</div>

						<div class="field">
							<label class="label">Invalid Text</label>
							<div class="control has-icons-right">
								<input class="input is-danger" type="text" placeholder="Type here" value="hello@">
								<span class="icon is-small is-right">
									<i class="fa fa-warning"></i>
								</span>
							</div>
							<p class="help is-danger">This is invalid</p>
						</div>

						<div class="field">
							<label class="label">Select</label>
							<div class="control">
								<div class="select">
								<select>
									<option>Select dropdown</option>
									<option>With options</option>
								</select>
								</div>
							</div>
						</div>

						<div class="field">
							<label class="label">Textarea</label>
							<div class="control">
								<textarea class="textarea" placeholder="Textarea"></textarea>
							</div>
						</div>

						<div class="field">
							<label class="label">Checkbox</label>
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									You will find <a href="#">the list</a>
								</label>
							</div>
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									Another checkbox
								</label>
							</div>
						</div>

						<div class="field">
							<label class="label">Inline Radios</label>
							<div class="control">
								<label class="radio">
									<input type="radio" name="question">
									Yes
								</label>
								<label class="radio">
									<input type="radio" name="question">
									No
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column is-3-desktop is-5-tablet">
				<div class="card form-fields">
					<div class="card-content">
						<div class="field">
							<label class="label">Preferences</label>
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									Save my preferences
								</label>
							</div>
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									Save my preferences
								</label>
							</div>
							<div class="control">
								<label class="checkbox">
									<input type="checkbox">
									Save my preferences
								</label>
							</div>
						</div>

						<div class="field">
							<label class="label">Post Status</label>
							<div class="control">
								<div class="select">
								<select>
									<option>Publish</option>
									<option>Draft</option>
								</select>
								</div>
							</div>
						</div>

						<div class="file has-name is-boxed field right-column-file">
							<label class="file-label">
								<input class="file-input" type="file" name="resume">
								<span class="file-cta">
									<span class="file-icon">
										<i class="fa fa-upload"></i>
									</span>
									<span class="file-label">
										Choose an image
									</span>
								</span>
								<span class="file-name">
									Screen Shot 2017-07-29 at 15.54.25.png
								</span>
							</label>
						</div>

						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link"><i class="fa fa-floppy-o"></i> Save</button>
							</div>
							<div class="control">
								<button class="button is-danger"><i class="fa fa-power-off"></i> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /.page-main-content -->

@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/form.js') }}"></script>
@endpush
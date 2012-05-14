@layout('layouts.website')

@section('page')

	{{ Form::open('', 'post', array('id'=>'create_form'), true) }}

		{{ Form::label('textbox', __('pv.text'), array('class'=>'required')) }}
		<span class="help">{{ __('pv.text_info') }}</span>
		{{ Form::textarea('textbox') }}

		{{ Form::label('password', __('pv.shared_password'), array('class'=>'required')) }}
		<span class="help">{{ __('pv.shared_password_info') }}</span>
		{{ Form::text('password') }}

		{{ Form::label('expire', __('pv.expire_after')) }}
		{{ Form::select('expire', Config::get('pv.hours'), '24') }}			

		{{ Form::label('expire', __('pv.pull_to_encrypt')) }}

		<div class="QapTcha"></div>

		<!-- note this is hidden, it's only here for the qaptcha -->
		<input type="submit" id="submit" value="Submit form" />

	{{ Form::close() }}

	<div id="sponsor">
		{{ __('pv.builtby') }}
	</div>	
			
	<div id="results" class="reveal-modal">
		<p>{{ __('pv.modal_message') }}</p>
		
		{{ Form::textarea('copy_text', '', array('id'=>'copy_text')) }}
		{{ Form::button(__('pv.copy_to_clipboard'), array('id'=>'copy_button')) }}

	</div>
	
	<div id="copied"><h2>Copied!</h2></div>
	<div id="error"><h2>Error :(</h2></div>

	<script type="text/template" id="response_template">
		{{ __('pv.copymessage') }}
	</script>
@endsection
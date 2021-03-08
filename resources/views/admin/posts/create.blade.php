@extends('admin.layouts.admin')

@section('title',__('views.admin.posts.create.title') )

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::open(['route'=>['admin.posts.store'],'method' => 'post','class'=>'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >
                        <!-- {{ __('views.admin.users.edit.name') }} -->
                        Title
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="title" type="text" class="form-control col-md-7 col-xs-12"
                               name="title" value="" required>
                        @if($errors->has('title'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('title') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sub_title">
                        <!-- {{ __('views.admin.users.edit.email') }} -->
                        Sub Title
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="sub_title" type="sub_title" class="form-control col-md-7 col-xs-12 "
                               name="sub_title" value="" required>
                        @if($errors->has('sub_title'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('sub_title') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paragraph_1">
                        <!-- {{ __('views.admin.users.edit.password') }} -->
                        Paragraph 1
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- <input id="password" type="password" class="form-control col-md-7 col-xs-12 @if($errors->has('password')) parsley-error @endif"
                               name="password"> -->
                        <textarea id="paragrap1" name="paragraph_1" rows="5" style="width:500px"></textarea>
                        @if($errors->has('password'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('password') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paragraph_2">
                        <!-- {{ __('views.admin.users.edit.confirm_password') }} -->
                        Paragraph 2
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="paragrap2" name="paragraph_2" rows="5" style="width:500px"></textarea>
                        @if($errors->has('password_confirmation'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('password_confirmation') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paragraph_3">
                        <!-- {{ __('views.admin.users.edit.confirm_password') }} -->
                        Paragraph 3
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="paragrap3" name="paragraph_3" rows="5" style="width:500px"></textarea>
                        @if($errors->has('password_confirmation'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('password_confirmation') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image_url">
                        <!-- {{ __('views.admin.users.edit.confirm_password') }} -->
                        Image URL
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="image_url" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('image_url')) parsley-error @endif"
                               name="image_url">
                        @if($errors->has('image_url'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('image_url') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption_image">
                        <!-- {{ __('views.admin.users.edit.confirm_password') }} -->
                        Caption Image
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="caption_image" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('caption_image')) parsley-error @endif"
                               name="caption_image">
                        @if($errors->has('caption_image'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('caption_image') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quote">
                        <!-- {{ __('views.admin.users.edit.confirm_password') }} -->
                        Quote
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="quote" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('quote')) parsley-error @endif"
                               name="quote">
                        @if($errors->has('quote'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('quote') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="publish">
                        <!-- {{ __('views.admin.users.edit.roles') }} -->
                        Publish
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="publish" name="publish" class="select2" style="width: 100%" autocomplete="off">
                            <option value=1>Yes</option>
                            <option value=0>No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                        <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection
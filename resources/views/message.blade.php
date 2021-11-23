@extends('layouts.app', ['activePage' => 'message', 'titlePage' => 'Send Message'])

@section('content')
    <div class="card card-plain">
        <div class="card card-plain">
            <div class="card card-plain">
                <div class="container">
                <form action="{{ route('message') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="label">Subject Type</label>
                        <div class="control">
                            <div class="select">
                                <select name="type">
                                    <option value="question" href="#">Question</a>
                                    <option value="complaint" href="#">Complaint</a>
                                    <option value="thanks" href="#">Thanks</a>
                                </select>
                            </div>
                            @error('type')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="hello@"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>





                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Enter you subject"
                            value="{{ old('subject') }}">
                    </div>


                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="message" rows="10" cols="157"
                                placeholder="Write Your Message Here">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div style="text-align:center">
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="btn btn-success">Send</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

            </div>
        </div>
    @endsection

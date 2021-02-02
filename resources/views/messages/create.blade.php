@extends('app')

@section('content')


        <div class="px-4 py-5 sm:px-6">
            <form action="{{ route('messages.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" name="subject" id="subject" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                            @if($errors)

                            <p class="mt-2 text-sm text-red-500">
                                {{ $errors->default->first('subject') }}
                            </p>
                            @endif
                        </div>

                        <div>
                            <label for="body" class="block text-sm font-medium text-gray-700">
                                Body
                            </label>
                            <div class="mt-1">
                                <textarea id="body" name="body" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            @if($errors)

                                <p class="mt-2 text-sm text-red-500">
                                    {{ $errors->default->first('body') }}
                                </p>
                            @endif
                        </div>


                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>

@endsection

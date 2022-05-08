@extends('layouts.tasks')
@section('content')

	<div class="sm:flex sm:items-center py-4">
		<div class="sm:flex-auto">
			<h1 class="text-xl font-semibold text-gray-900">{{ __('tasks.header') }}</h1>
		</div>
	</div>
	@include('partials._search')
	<div class="mt-8 flex flex-col">
		<div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
				<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
					@if ($tasks->isNotEmpty())
						<table class="min-w-full divide-y divide-gray-300">
							<thead class="bg-gray-50">
								<tr>
									<th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"></th>
									<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"></th>
								</tr>
							</thead>
							<tbody class="divide-y divide-gray-200 bg-white">
							@foreach ($tasks as $task)
								<tr>
									<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
										<img class="w-[250px] h-[250px] object-cover object-center" src="{{ $task->image('cover', 'flexible' )}}" alt="{{$task->title}}"/>
									</td>
									<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $task->title }}</p>

								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<p class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 ">{{ __('tasks.no_tasks') }}</p>
					@endif
					
				</div>
			</div>	
		</div>
	</div>
@endsection

<div class="mt-3" wire:sortable="updateDraggable">
	@foreach($sortable as $field => $sort)
	<span wire:sortable.item="{{ $sort['id'] }}" wire:key="sortable-{{ $sort['id'] }}" class="badge bg-primary text-light mb-1">
			<i wire:sortable.handle class="fa fa-arrow-{{ $sort['direction'] === 'desc' ? 'down' : 'up' }} draggable" style="cursor:grab"></i>
			{{ $sort['head'] }}
			<i wire:click="dropSortField('{{ $field }}')" style="cursor:pointer" class="fa fa-times"></i>
	</span>
	@endforeach
	</div>
	
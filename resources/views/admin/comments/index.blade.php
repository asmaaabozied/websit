@extends('layouts.admin')
@section('content')
@can('comment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.comment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Comment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.comment.fields.id') }}
                        </th>
                        @if(isset($images))
                            @php $type = 'image' @endphp
                            <th>
                                {{ trans('cruds.comment.fields.image') }}
                            </th>
                        @elseif(isset($sounds))
                            @php $type = 'sound' @endphp
                            <th>
                                {{ trans('cruds.comment.fields.sound') }}
                            </th>
                        @elseif(isset($videos))
                            @php $type = 'video' @endphp
                            <th>
                                {{ trans('cruds.comment.fields.video') }}
                            </th>
                        @endif

                        <th>
                            {{ trans('cruds.comment.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.comment.fields.comment') }}
                        </th>
                        <th>
                            {{ trans('cruds.comment.fields.active') }}
                        </th>
                        <th>
                            {{ trans('cruds.comment.fields.creation_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $key => $comment)
                        <tr data-entry-id="{{ $comment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $comment->id ?? '' }}
                            </td>
                            @if(isset($images))
                            <td>
                                {{ $comment->image->title ?? '' }}
                            </td>
                            @elseif(isset($sounds))
                            <td>
                                {{ $comment->sound->title ?? '' }}
                            </td>
                            @elseif(isset($videos))
                            <td>
                                {{ $comment->video->title ?? '' }}
                            </td>
                            @endif
                            <td>
                                {{ $comment->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $comment->comment ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $comment->active ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $comment->active ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $comment->creation_date ?? '' }}
                            </td>
                            <td>

                                @can('comment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.comments.edit', $comment->id) }}?type={{$type=null}}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('comment_delete')
                                    <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('comment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.comments.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-Comment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
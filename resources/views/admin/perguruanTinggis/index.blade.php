@extends('layouts.admin')
@section('content')
@can('perguruan_tinggi_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.perguruan-tinggis.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.perguruanTinggi.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.perguruanTinggi.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PerguruanTinggi">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            No
                        </th>
                        <th>
                            {{ trans('cruds.perguruanTinggi.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.perguruanTinggi.fields.prodi') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perguruanTinggis as $key => $perguruanTinggi)
                        <tr data-entry-id="{{ $perguruanTinggi->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $loop->iteration ?? '' }}
                            </td>
                            <td>
                                {{ $perguruanTinggi->nama ?? '' }}
                            </td>
                            <td>
                                @foreach($perguruanTinggi->prodis as $key => $item)
                                    <span class="badge badge-info">{{ $item->nama }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('perguruan_tinggi_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.perguruan-tinggis.show', $perguruanTinggi->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('perguruan_tinggi_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.perguruan-tinggis.edit', $perguruanTinggi->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('perguruan_tinggi_delete')
                                    <form action="{{ route('admin.perguruan-tinggis.destroy', $perguruanTinggi->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-PerguruanTinggi:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
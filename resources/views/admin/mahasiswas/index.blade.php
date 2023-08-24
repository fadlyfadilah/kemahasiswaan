@extends('layouts.admin')
@section('content')
@can('mahasiswa_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.mahasiswas.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.mahasiswa.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.mahasiswa.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Mahasiswa">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.nim') }}
                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.nama') }}
                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.perguruan') }}
                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.prodi') }}
                        </th>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswas as $key => $mahasiswa)
                        <tr data-entry-id="{{ $mahasiswa->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $mahasiswa->id ?? '' }}
                            </td>
                            <td>
                                {{ $mahasiswa->nim ?? '' }}
                            </td>
                            <td>
                                {{ $mahasiswa->nama ?? '' }}
                            </td>
                            <td>
                                {{ $mahasiswa->perguruan->nama ?? '' }}
                            </td>
                            <td>
                                {{ $mahasiswa->prodi->nama ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Mahasiswa::STATUS_SELECT[$mahasiswa->status] ?? '' }}
                            </td>
                            <td>
                                @can('mahasiswa_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.mahasiswas.show', $mahasiswa->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('mahasiswa_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.mahasiswas.edit', $mahasiswa->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('mahasiswa_delete')
                                    <form action="{{ route('admin.mahasiswas.destroy', $mahasiswa->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  let table = $('.datatable-Mahasiswa:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
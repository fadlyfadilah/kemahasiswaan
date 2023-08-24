@extends('layouts.admin')
@section('content')
@can('semester_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.semesters.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.semester.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.semester.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Semester">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.semester.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.semester.fields.mahasiswa') }}
                        </th>
                        <th>
                            {{ trans('cruds.semester.fields.semester') }}
                        </th>
                        <th>
                            Perguruan Tinggi
                        </th>
                        <th>
                            Prodi
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($semesters as $key => $semester)
                        <tr data-entry-id="{{ $semester->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $semester->id ?? '' }}
                            </td>
                            <td>
                                {{ $semester->mahasiswa->nama ?? '' }}
                            </td>
                            <td>
                                {{ $semester->semester ?? '' }}
                            </td>
                            <td>
                                {{ $semester->mahasiswa->perguruan->nama ?? '' }}
                            </td>
                            <td>
                                {{ $semester->mahasiswa->prodi->nama ?? '' }}
                            </td>
                            <td>
                                @can('semester_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.semesters.show', $semester->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('semester_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.semesters.edit', $semester->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('semester_delete')
                                    <form action="{{ route('admin.semesters.destroy', $semester->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  let table = $('.datatable-Semester:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
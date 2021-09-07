<div>
    <h3 class="form-header"><span>Mid-Year Review</span></h3>

    <div class="table-responsive">
        <table class="table table-bordered table-hover dataTables" >
        <thead>
        <tr>
            <th>#</th>
            <th>Objectives</th>
            <th>Progress</th>
            <th>Factors Affecting Performance</th>
            <th class="text-left">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($opras->midYearReviews as $key => $midYearReview)
                <tr class="gradeX">
                    <td>{{ $key+1 }}</td>
                    <td>{!! str_limit($midYearReview->objective, 10, '...') !!}</td>
                    <td>{!! str_limit($midYearReview->progress_made, 10, '...') !!}</td>
                    <td>{!! str_limit($midYearReview->factor_affecting_performance, 10, '...') !!}</td>

                    <td class="text-left">
                        <a href="#" class="" data-toggle="modal" data-target="#mid-year-{{$key}}" title="Show"><i class="fa fa-eye"></i></a>
                        @if ($opras->checkSectionThree())
                            <a style="margin-left: 5px;" href="{{ route('mid-year-review.edit', $midYearReview->getRouteKey()) }}" class="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            @if ($midYearReview->comments)
                                <i style="margin-left: 15px;" class="text-danger fa fa-exclamation"></i>
                            @endif
                        @endif
                    </td>

                    <!-- Modal -->
                    <div id="mid-year-{{ $key }}" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Mid-Year Review</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Agreed Objectives </label>
                                    <div class="well" style="word-wrap: break-word;">
                                        {!! $midYearReview->objective !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Progress </label>
                                    <div class="well" style="word-wrap: break-word;">
                                        {!! $midYearReview->progress_made !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Factors Affecting Performance </label>
                                    <div class="well" style="word-wrap: break-word;">
                                        {!! $midYearReview->factor_affecting_performance !!}
                                    </div>
                                </div>

                                @if ($midYearReview->comments)
                                <div class="form-group">
                                    <label>Reason for Supervisor decline </label>
                                    <div class="well" style="word-wrap: break-word;">
                                        {!! $midYearReview->comments !!}
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

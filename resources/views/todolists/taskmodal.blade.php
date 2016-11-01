<div class="modal fade" id="task-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Manage Tasks</h4>
                            <p>of <strong id="task-modal-subtitle"></strong></p>
                        </div>
                        <div class="modal-body">
                            <div class="panel">
                                <div class="panel-default">
                                    <table class="table">
                                        <thread>
                                            <td width="50" style="vertical-align: middle;">
                                                <input type="checkbox" name="check_all" id="check-all" />
                                            </td>
                                            <td>
                                                <input type="text" class="task-input" placeholder="Enter New Task" />
                                            </td>
                                        </thread>
                                        <tbody id="task-table-body"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="pull-left">
                                <a id="all-tasks" class="btn btn-xs filter-btn btn-info active">All</a>
                                <a id="active-tasks" class="btn btn-xs filter-btn btn-active">Active</a>
                                <a id="completed-tasks" class="btn btn-xs filter-btn btn-success">Completed</a>
                            </div>
                            <div class="pull-right">
                                <small id="active-tasks-counter"></small>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
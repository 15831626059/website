@extends('admin.base')

@section('content')
    <div class="layui-card">

        @include('admin.breadcrumb')

        <div class="layui-card-body">
            <form class="layui-form" action="@if(isset($id)){{ route('admin::entity.update', ['id' => $id]) }}@else{{ route('admin::entity.save') }}@endif" method="post">
                @if(isset($id)) {{ method_field('PUT') }} @endif
                <div class="layui-form-item">
                    <label class="layui-form-label">名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required  lay-verify="required" autocomplete="off" class="layui-input" value="{{ $model->name ?? ''  }}">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">数据库表名</label>
                        <div class="layui-input-block">
                            <input type="text" name="table_name" required  lay-verify="required" autocomplete="off" class="layui-input" value="{{ $model->table_name ?? ''  }}" placeholder="模型对应的数据库表名称，保存后不能修改" @isset($model->table_name) disabled @endisset>
                        </div>
                    </div>
                    @if(!isset($id))
                    <div class="layui-form-item">
                        <label class="layui-form-label">新建数据库表</label>
                        <div class="layui-input-inline" style="width: 50px;">
                            <input type="checkbox" name="is_modify_db" lay-skin="switch" lay-text="是|否" value="1" checked>
                        </div>
                        <div class="layui-form-mid layui-word-aux">某些情况下可能数据库表已经通过其它方式建好，此处无需新建数据库表，添加模型主要是方便利用框架提供的模型增删改查功能</div>
                    </div>
                    @endif
                    <div class="layui-form-item">
                        <label class="layui-form-label">描述</label>
                        <div class="layui-input-block">
                            <input type="text" name="description" autocomplete="off" class="layui-input" value="{{ $model->description ?? ''  }}">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内部模型</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="is_internal" value="1" title="是"  @if(!isset($model) || isset($model) && $model->is_internal === App\Model\Admin\Entity::INTERNAL_YES) checked @endif>
                            <input type="radio" name="is_internal" value="0" title="否"  @if(isset($model) && $model->is_internal === App\Model\Admin\Entity::INTERNAL_NO) checked @endif>
                        </div>
                        <div class="layui-form-mid layui-word-aux">内部模型前台不可直接访问</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">列表显示</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="is_show_content_manage" value="1" title="是"  @if(!isset($model) || isset($model) && $model->is_show_content_manage === App\Model\Admin\Entity::CONTENT_MANAGE_YES) checked @endif>
                            <input type="radio" name="is_show_content_manage" value="0" title="否"  @if(isset($model) && $model->is_show_content_manage === App\Model\Admin\Entity::CONTENT_MANAGE_NO) checked @endif>
                        </div>
                        <div class="layui-form-mid layui-word-aux">是否显示在内容管理列表中</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">评论</label>
                        <div class="layui-input-block">
                            <input type="radio" name="enable_comment" value="1" title="启用"  @if(!isset($model) || isset($model) && $model->enable_comment === App\Model\Admin\Entity::COMMENT_ENABLE) checked @endif>
                            <input type="radio" name="enable_comment" value="0" title="禁用"  @if(isset($model) && $model->enable_comment === App\Model\Admin\Entity::COMMENT_DISABLE) checked @endif>
                        </div>
                    </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formAdminUser" id="submitBtn">提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var form = layui.form;

        //监听提交
        form.on('submit(formAdminUser)', function(data){
            window.form_submit = $('#submitBtn');
            form_submit.prop('disabled', true);
            $.ajax({
                url: data.form.action,
                data: data.field,
                success: function (result) {
                    if (result.code !== 0) {
                        form_submit.prop('disabled', false);
                        layer.msg(result.msg, {shift: 6});
                        return false;
                    }
                    layer.msg(result.msg, {icon: 1}, function () {
                        if (result.reload) {
                            location.reload();
                        }
                        if (result.redirect) {
                            location.href = '{!! url()->previous() !!}';
                        }
                    });
                }
            });

            return false;
        });
    </script>
@endsection

<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div {!! $attributes !!} style="width: 100%; height: 500px;">
            {{--            {!! $value !!}--}}
        </div>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}"/>

        @include('admin::form.help-block')

    </div>
</div>

<!-- script标签加上 "init" 属性后会自动使用 Dcat.init() 方法动态监听元素生成 -->
<script require="@liumenggit.ace" init="{!! $selector !!}">
    ace.require("ace/ext/language_tools");
    var editor = ace.edit(id);
    var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
    editor.session.setMode(new JavaScriptMode());
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true
    });
    // editor.setOption('highlightGutterLine', false)
    editor.setTheme("ace/theme/monokai");
    // editor.getSession().setUseWrapMode(true);
    // editor.config.set("basePath", "https://url.to.a/folder/that/contains-ace-modes");
    editor.setValue(`{!! $value !!}`);
    editor.getSession().on('change', function (e) {
        // console.log(editor.getValue())
        $this.parents('.form-field').find('input[type="hidden"]').val(editor.getValue());
    });
</script>

<script src="js/submit_javascript.js"></script>
<div class="form-horizontal" id="form_id">
    <fieldset>

        <!-- Form Name -->
        <legend>New Article</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Text Input</label>
            <div class="col-md-4">
                <input id="title" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                <span class="help-block">help</span>
            </div>
        </div>[]

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Text Area</label>
            <div class="col-md-4">
                <textarea class="form-control" id="article" name="textarea">default text</textarea>
            </div>
        </div>

        <button onClick="../operations/saveArticle.php">Create!</button>
    </fieldset>
</div>
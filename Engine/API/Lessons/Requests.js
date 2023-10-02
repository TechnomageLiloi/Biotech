Bionic.Lessons = {
    create: function (key_exercise)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Bionic.Lessons.Create', {
            key_exercise: key_exercise
        }, function (data) {
            Bionic.Lessons.getCollection($('#page'));
        }, function () {

        });
    },

    getCollection: function (wrap)
    {
        API.request('Bionic.Lessons.Collection', {
            
        }, function (data) {
            wrap.html(data.render);
        }, function () {

        });
    },

    edit: function (key_lesson)
    {
        API.request('Bionic.Lessons.Edit', {
            key_lesson: key_lesson
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (keyLesson)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#exercises-edit');
        API.request('Bionic.Lessons.Save', {
            key_lesson: keyLesson,
            task: jq_block.find('[name=task]').val(),
            mark: jq_block.find('[name=mark]').val(),
            dt: jq_block.find('[name=dt]').val()
        }, function (data) {
            Bionic.Lessons.getCollection($('#page'));
        }, function () {

        });
    },

    remove: function (keyLesson)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Bionic.Lessons.Remove', {
            key_lesson: keyLesson,
        }, function (data) {
            Bionic.Lessons.getCollection($('#page'));
        }, function () {

        });
    }
}
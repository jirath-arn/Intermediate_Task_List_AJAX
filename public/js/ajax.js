jQuery(document).ready(function($){

    //----- Open model Create -----//
    jQuery('#btn-add').click(function () {
        jQuery('#btn-create').val("add");
        jQuery('#myForm').trigger("reset");
        jQuery('#formModal').modal('show');
    });

    // Create Button
    jQuery('#btn-create').click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            description: jQuery('#description').val(),
        };
        var state = jQuery('#btn-create').val();
        var type = "POST";
        var todo_id = jQuery('#task_id').val();
        var ajaxurl = 'tasks';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var todo = '<tr id="task' + data.id + '"><td>' + data.id + '</td><td>' + data.description + '</td>';
                if (state == "add") {
                    jQuery('#tasks-list').append(todo);
                } else {
                    jQuery("#task" + todo_id).replaceWith(todo);
                }
                jQuery('#myForm').trigger("reset");
                jQuery('#formModal').modal('hide')
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});
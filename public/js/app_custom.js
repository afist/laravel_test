$(document).ready(function () {
    $('.button-show').click(function () {
        window.location.href = $(this).attr('href');
    });

    $('.button-create').click(function () {
        window.location.href = $(this).attr('href');
    });
    $('.button-edit').click(function () {
        window.location.href = $(this).attr('href');
    });
    $('.button-new').click(function () {
        window.location.href = $(this).attr('href');
    });
    $('.create-new').click(function () {
        const href = $(this).attr('href');
        var form = $(this).parent();
        var serializedData = form.serialize();
        console.log(serializedData);
            $.ajax({
                url: href,
                type: 'POST',
                data: serializedData,
                success: function () {
                    // window.location.reload();
                }
            });

    });



    $('.button-remove').click(function () {
        const href = $(this).attr('href');

        if (confirm("Удалить?")) {
            $.ajax({
                url: href,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    window.location.reload();
                }
            });
        }
    });
});
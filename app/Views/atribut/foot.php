    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.20/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table').DataTable();

            $('#upd').on('show.bs.modal', function (e) {
                let id = $(e.relatedTarget).data('id');
                $.ajax({
                    type: 'post',
                    url: 'crud/action/upd/'+id,
                    data: {
                        id: id
                    },
                    success: function (data) {
                        $('#form-ubah').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
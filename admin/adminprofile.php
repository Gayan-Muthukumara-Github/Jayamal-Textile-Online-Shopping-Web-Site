<?php
include('config/dbcon.php');
include('authentication.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>
<!--Delete order Modal -->
<div class="modal fade" id="DeletModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id" class="delete_order_id">
                    <p>
                        Are you sure. you want to delete this data?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="deleteOrder" class="btn btn-primary">Yes, Delete.!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Delete order Model-->

<!-- Content Wrapper. Contains page content -->

<?php include('includes/script.php'); ?>

<script>
    $(document).ready(function() {
        $('.deletebtn').click(function(e) {
            e.preventDefault();

            var user_id = $(this).val();
            $('.delete_order_id').val(user_id);
            $('#DeletModal').modal('show');

        });
    });
</script>
<?php include('includes/footer.php'); ?>
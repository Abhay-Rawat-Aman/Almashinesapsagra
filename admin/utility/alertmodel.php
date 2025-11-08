
<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


<!-- Common Error Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" id="messageModalHeader">
                <h5 class="modal-title" id="messageModalLabel">Modal Title</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="messageModalBody">
                Modal message goes here.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                 <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
            </div>
        </div>
    </div>
</div>

<script>
    // Function to show the message modal with dynamic content
function showMessageModal(title, message, headerClass) {
    // Set modal title
    document.getElementById('messageModalLabel').innerText = title;

    // Set modal message
    document.getElementById('messageModalBody').innerText = message;

    // Set modal header styling
    const header = document.getElementById('messageModalHeader');
    header.className = 'modal-header ' + headerClass;

    // Show the modal
    $('#messageModal').modal('show');
}
</script>
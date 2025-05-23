document.getElementById('loginBtn').addEventListener('click', function () {
    const commentForm = document.getElementById('commentForm');
    const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
    
    if (commentForm && loginModal) {
      commentForm.classList.remove('d-none');
      loginModal.hide();
    }
  });
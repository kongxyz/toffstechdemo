<form id="signupForm" method="POST" action="php_scripts/mail.php">
  <span id="message" class="badge message-badge"></span>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="email">Business Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="company">Company Name</label>
        <input type="text" class="form-control" id="company" name="company" required />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required />
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="social">Skype / WeChat ID</label>
        <input type="text" class="form-control" id="social" name="social" required />
      </div>
      <div class="form-group">
        <label for="website">Website to be Protected</label>
        <input type="text" class="form-control" id="website" name="website" placeholder="www.abc.com" required />
      </div>
    </div>
    <div class="col-md-6">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" rows="5" name="message"></textarea>
    </div>
  </div>
  <p class="rule">By clicking submit, I hereby acknowledge and accept the Privacy Policy and Terms of Use of this website.</p>
  <div class="form-button-wrapper">
    <button type="submit">Submit</button>
  </div>
</form>
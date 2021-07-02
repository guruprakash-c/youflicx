<section class="modal fade" id="subscribemdl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="subscribemdlLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content">
                    <header class="modal-header">
                        <h5 class="modal-title" id="subscribemdlLabel">Enter the details to continue</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </header>
                    <main class="modal-body">
                        <div class="container-fluid">
                            <form name="subscribeform" method="post" enctype="multipart/form-data">
                            <em class="text-sm">Your Email addresses and Mobile(Cell) phone numbers will be verified, please enter a real one. Disposable addresses/numbers have been blocked.</em>
                            <section class="row">
                                <div class="col-md-6">
                                    <label for="nametxt" class="form-label">Full Name<sup class="text-danger ms-1">*</sup></label>
                                    <input type="text" maxlength="50" minlength="5" class="form-control" name="nametxt" id="nametxt" aria-describedby="nameHelp" placeholder="max. 50 characters" oninvalid="this.setCustomValidity('Please enter your full name.')" oninput="this.setCustomValidity('')" autocomplete="off" required />
                                    <small id="nameHelp" class="form-text">max. 5 to 50 characters</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobltxt" class="form-label">Mobile or Cell phone number<sup class="text-danger ms-1">*</sup></label>
                                    <input type="text" class="form-control" name="mobltxt" id="mobltxt" aria-describedby="moblHelp" placeholder="eg. +1654789321" oninvalid="this.setCustomValidity('Please enter your mobile or cell phone number.')" oninput="this.setCustomValidity('')" autocomplete="off" required />
                                    <small id="moblHelp" class="form-text">We'll never share your mobile or cell phone number with anyone else.</small>
                                </div>
                                <div class="col-md-12">
                                    <label for="emailtxt" class="form-label">Email address<sup class="text-danger ms-1">*</sup></label>
                                    <input type="email" class="form-control" name="emailtxt" id="emailtxt" aria-describedby="emailHelp" placeholder="eg. johnSmith@email.com" oninvalid="this.setCustomValidity('Please enter your email address.')" oninput="this.setCustomValidity('')" autocomplete="off" required />
                                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                                </div>
                            </section>
                            </form>
                        </div>
                    </main>
                    <footer class="modal-footer">
                        <button type="submit" class="btn btn-primary">Join me<i class="fa fa-telegram-plane ms-1"></i></button>
                    </footer>
            </div>
        </div>
    </section>
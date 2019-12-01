<div class="container-fluid main-bg">
    <div class="row">
        <form method="post" action="?type=contact&action=message" id="formContact">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="" placeholder="Votre nom" required>
                <small id="nameHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="" placeholder="Votre prénom" required>
                <small id="firstnameHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre email" required>
                <small id="emailHelp" class="form-text text-muted">Nous ne partageons pas vos données.</small>
            </div>
            <div class="form-group">
                <label for="textarea">Message</label><br />
                <textarea name="content" class="form-control" id="text-zone" placeholder="Votre message" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfiZMUUAAAAAMp23wppF4ixWW0JnEnd3Yf1gQTI"></div>
            <div class="form-group form-check">
                <input type="checkbox" name="rgpd" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">En soumettant ce formulaire, j'accepte que mes informations ne soient utilisées qu'exclusivement dans le cadre de ma demande. Mes données ne seront ni revendues, ni utilisées à des fins commerciales.</label>
            </div>
            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
		<p id="formMessage" class="success error"><p/>
    </div>
</div>

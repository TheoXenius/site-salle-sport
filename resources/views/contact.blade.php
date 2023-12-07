@extends('base')

@section('title', 'Accueil')

@section('content')
<h2>Contact</h2>
<li>
    téléphone : le 06 00 00 00 00
</li>
<li>
    adresse : 5 Bd Louis XIV, 59800 Lille
</li>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.915508575188!2d3.0678293760717277!3d50.62868637451506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sen!2sfr!4v1701956062060!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <form>
        <label>Email</label>
        <input type="email" />

        <label>Votre demande</label>
        <input type="text" />

        <label>Votre message</label>
        <input type="text" />

        <input type="submit" value="Envoyer" />
    </form>
@endsection
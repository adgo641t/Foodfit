@extends('layouts.menu')
@section('content') 
          <div class="container faqs">
            <h3>Frequently Asked Questions : <b>Ordering/Shipping</b></h3>
          </div>
        
          <!-- Accordion FAQs -->
          <div class="container faqs2">
            <button class="accordion">When will I receive my order and what delivery options do I have?</button>
<div class="panel">
  <p class="panelText">Delivery options <b>depend on your postcode</b> , but you can receive all your dishes in one delivery on: Friday, Sunday, Monday, Tuesday or Wednesday.</p>
  <p class="panelText">Depending on your postcode you will have the option to receive your order in the morning (from 9:00 to 14:00)</b>, in the <b>afternoon (from 15:00 to 20:00)</b>, or choose between <b>both time slots (morning or afternoon)</b>. Before receiving your dishes <b>you will receive an email stating the arrival time of your order...</b> You won't wait more than 1h30!</p>
  <p class="panelText">You can also personalise the delivery of your order by choosing a time slot.</p>
</div>

<button class="accordion">Can I pick up my order at any point?</button>
<div class="panel">
  <p class="panelText">Due to the current covid-19 situation you will not be able to pick up your order at our bakery.</p>
  <p class="panelText">If you have any questions, please call us on +34 910 37 97 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What happens if my dishes arrive in bad condition?</button>
<div class="panel">
  <p class="panelText">It happens very rarely, but if it does, <b>contact us so that we can find the best solution</b>.</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to faqsfootfit@gmail.com</p>
</div>

<button class="accordion">Can I change my delivery details (address, day or time slot)?</button>
<div class="panel">
  <p class="panelText">You will be able to make changes from your account in the detail of the order you want to modify. You will have the option to make changes to your address and/or the time you wish to receive your order.</p>
</div>

<button class="accordion">Do you deliver to the Balearic Islands, Canary Islands, Ceuta or Melilla?</button>
<div class="panel">
  <p class="panelText">At the moment <b>we only deliver in Palma de Mallorca</b>.  In the rest of the Balearic Islands, the Canary Islands, Ceuta and Melilla we are still studying how we can offer you this service in the future.</p>
</div>

<button class="accordion">What do I do if I have not been home to receive my order?</button>
<div class="panel">
  <p class="panelText">Don't worry, contact us and <b>we will arrange delivery again as soon as possible</b>.</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">How do I know that my plates are on their way?</button>
<div class="panel">
  <p class="panelText">If you want to know the status of your order call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What happens if I have a problem with the shipment?</button>
<div class="panel">
  <p class="panelText">If you have had any problems with the delivery of your order we want to be the first to know. Your experience is the most important thing to us</p>
  <p class="panelText">Call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">What do I do if my dishes have not arrived with the expected quality?</button>
<div class="panel">
  <p class="panelText">We care deeply about how every detail affects what you eat. To the dishes we cook and serve. We obsess about it.</p>
  <p class="panelText">So, if you have had a bad experience, do not hesitate to call us on +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>

<button class="accordion">Can I cancel my order?</button>
<div class="panel">
  <p class="panelText">We may cancel and/or refund your order as long as your dishes have not been cooked.</p>
  <p class="panelText">Contact us by calling +34 934 37 56 23 on Mondays and Fridays from 09:00 to 19:00; Tuesdays, Wednesdays and Thursdays from 09:00 to 18:00; and Sundays from 12:00 to 21:00. Or, if you prefer, you can write to us at faqsfoodfit@gmail.com</p>
</div>
          </div>
          
            

  <!-- Footer section -->
    <footer id="footer">
      <div class="col text-center">
        <a class="nav-link" href="{{ url('/faq') }}">Faqs</a>
      </div>
      <div class="col text-center">
        <div class="icon-footer">
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-solid fa-envelope"></i>
        </div>
      </div>
      <p class="text-center">© Copyright FOOD&FIT</p>
  
    </footer>
  </div>
@endsection

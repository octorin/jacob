---
layout: default
permalink: /contact/
title: Contact
---
  <!-- Content -->
   <div class="container mx-auto">
    <div class="grid grid-cols-2 gap-16">
      <section class="col-span-2 md:col-span-1">
        <div class="max-w-screen-md">
          <h1 class="text-3xl pt-10 pb-8 font-barlow font-light"><b>let's connect</b></h1>        
          <form class="space-y-8" name="gform" id="gform" enctype="text/plain" action="https://docs.google.com/forms/d/MYSURVEYID/formResponse?" target="hidden_iframe" onsubmit="submitted=true;">
           <label for="name" class="block mb-2 text-x1 font-barlow font-bold text-gray-900 dark:text-gray-300">Your Name</label>
           <div class="flex gap-4">   
             <input type="text" id="entry.**number**" name="entry.**number**"
                   class="w-1/2 p-2.5 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                   placeholder="First name" required />
               <input type="text" id="entry.**number**" name="entry.**number**"
                   class="w-1/2 p-2.5 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                   placeholder="Last name" required />
           </div>
            <div>
              <label for="email" class="block mb-2 font-barlow font-bold text-gray-900 dark:text-gray-300">Your
                email</label>
              <input type="email" id="entry.**number**" name="entry.**number**"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="youremail@gmail.com" required />
            </div>
            <div>
              <label for="subject"
                class="block mb-2 font-barlow font-bold text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="entry.**number**" name="entry.**number**"
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="What can I help you with?" required />
            </div>
            <div>
              <label for="date"
                class="block mb-2 font-barlow font-bold text-gray-900 dark:text-gray-300">Event Date</label>
              <input type="text" id="entry.**number**" name="entry.**number**"
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="" required />
            </div>
            <div>
              <label for="venue"
                class="block mb-2 font-barlow font-bold text-gray-900 dark:text-gray-300">Venue / Location</label>
              <input type="text" id="entry.**number**" name="entry.**number**"
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                placeholder="" required />
            </div>
            <div class="sm:col-span-2">
              <label for="message" class="block mb-2 font-barlow font-bold text-gray-900 dark:text-gray-400">Your
                message</label>
              <textarea id="entry.**number**" name="entry.**number**" rows="6"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-neutral-900 dark:border-neutral-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Do you want to add more details?" required></textarea>
            </div>
            <button type="submit"
              class="rounded-lg sm:inline-flex w-full cursor-pointer justify-center rounded-md border border-transparent bg-gray-100 px-4 py-2 text-base font-medium text-gray-900 shadow-sm hover:bg-gray-900 hover:text-white focus:bg-gray-900 focus:text-white focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 sm:ml-3 sm:w-auto"><b>
              Send now</b>
            </button>
            <div id="formSubmissionText" class="hidden form-submission-text">
    <p>Please allow up to 1 Business Day for a reply. Thank you very much!</p>
  </div>
</form>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {}"></iframe>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> <!-- stopping Google Form redirection: original URL: assets/js/jquery.min.js-->
<script type="text/javascript">var submitted=false;</script>
<script type="text/javascript">
$('#gform').on('submit', function(e) {
  $('#gform *').fadeOut(2000);
  $('#gform').prepend('Sent! Please allow up to 2 Business Days for a reply. Thank you very much!');
  });
</script>         
        </div>
      </section>
      <div class="col-span-2 md:col-span-1 flex relative">
        <div
          class="bg-white dark:bg-neutral-900 p-5 pb-20 m-6 md:m-12 shadow-lg border border-gray-100 dark:border-neutral-800  hover:rotate-0 transition duration-500 rotate-6 relative">
          <img
            src="https://images.unsplash.com/reserve/yZfr4jmxQyuaE132MWZm_stagnes.jpg?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2052&q=80"
            alt="" class="flex flex-col aspect-square w-full object-cover h-auto max-h-full" />
        </div>
      </div>
    </div>
  </div>

this one uses php and js (jquery) together with bootstrap (so it will look elegant and resoinsive).

what it dose is load content from other pages into  a content div, using links that hold the address
<br>of the content.<br>

basically loading different pages without refreshing the browser.


<b>how to use</b>: see yapi/yjq_ajax/example_use .php<br>

and also yapi/yjq_ajax/example_content.php to see where the content is coming from.

include yapi/yjq_ajax/js/script.js
and then add this js line of code:

<pre>
yinit_ajax_tabs(tab_selector,content_selector)
</pre>
tab_selector- its the selector of the ajax link

content_selector- where the the ajaxs return content will appear.
the id must be ypreloader 

also add a loading div:
<pre>
  &ltdiv id="ypreloader"&gt
				 Loading...				
  &lt/div&gt
</pre>

yapi/yjq_ajax/example_use gives a more practical example use.

if theirs any mistake or something you dont understand please contact me.

contact form:

https://programingstuff.wordpress.com/%D7%A6%D7%95%D7%A8-%D7%A7%D7%A9%D7%A8/




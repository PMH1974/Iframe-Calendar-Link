# Iframe-Calendar-Link
Dropdown controlled Calendar with onclick to IFrame

This is a simple script written mostly in php, designed to send a date selected from a calendar, into an Iframe (So it can be used for SQL results for that day)
I have left out the SQL connection side and this should not require any editing to run.

The header and footers are optional, just add the <html><head> tags etc back into the index.php 

Ideally this needs to be done with loops, the code is very bulky and hard to edit.
I have also used switch to build the data for each of the 42 calendar blocks, which again would be so much better looped

The actual goal here is to have the calendar default on today, with the iframe open on today, but still allow it to be changed by either the Combo boxes choosing new months or
by the onclick event of the day. Would also be nice if the onclicked day changed colour, but haven't got there yet.

The boxes have the day number, but will also have a count of any related sql records to the date posted, to the iframe. (eventually)

But this is as far as i have got and it does work, so hopefully people who also cannot find something like this, will be able to use it.
Or anyone with a better way of doing this may be able to help me improve it.

Either way, thank you.

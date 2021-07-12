## Summary of Work

1. I started by going through the code to understand how the objects interact, and the syntax of why things were written in certain ways. 
- Time Spent: 30 min.

2. I then started working on how to print the HTML. My first strategy was just to print the HTML as it is in the example, using heredoc syntax. So it was hard coded and static. 
- Time Spent: 30 min.

3. My next solution was to add templating so that the HTML would be abstracted from the htmlStatement function, but could also be easily given dynamic variables. I struggled with setting up a Twig template, as I didn't want to add complexity/dependencies to the project if I could help it. I ultimately settled on just using HTML in a PHP file and using PHP tags for the logic. 
- Time Spent: 2 hours.

4. Next I needed to give the template the same logic as the regular statement. One of my other goals was to abstract the calculation logic in the Customer class to separate classes, so I could call that logic again in the HTML function. 
- Time Spent: 2.5 hours.

*Current Status*: After lots of surgery removing the rental calculation and frequent point calculations to separate classes, I realized I had almost run out of time. The template is still having issues referencing the data, but that is really the final hurdle. I'm continuing to work.
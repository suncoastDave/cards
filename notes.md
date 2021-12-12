--> API/Drug Lookup
-will need a fallback for NDC lookups that fail. I should use the NDCs from the last 12 months and update regularly. But if there is one not on there I need to prompt them to fill out a form and contact me for a free custom quote.
-also need to catch api returns that have a $0.00 return. I've seen that sometimes this only happens with a few of the pharmacies. Probably need to loop through return and if there is no good data, either fallback to the old pricing lookup or have them reach out to me via a form, as above.
-The api call needs the following: NDC, Quantity(route type), Zip Code, Radius.
    -Given that, I'll need
        -NDC (most popular) to Drug name table
        -All drug's quanities with count, ml, etc. You should be able to vlookup all those using the good NDCs
-Average price by NDC then use that one?

Homepage/CARDS
-For hover effect on home page cards, see if we can inject the id of the drug and then add it to the visited rule so it only changes for that drug/class
HOmepage/header
-style menu
Homepage/FOOTER
-need a new about us copy
Search
-Don't forget that I have to pick from brad's or wes's versions. They are on prescription.cards/typeahead then /typeahead.html or /brad.html

Grid.scss
-from this video @ 20:34 https://www.youtube.com/watch?v=g1kF45K-q7o
-mixins same vid @ 8:34 for breakpoints and media queries -- but note can't use Kevin's breakpoints since Nav already uses those from the Coder Coder vid
-Udemey. Some of this may have been from Colt's course, here https://www.udemy.com/course/bootstrap-4-bootcamp/learn/lecture/12262610#overview

Globals and Mixins Coder Coder
-from this video playlist https://www.youtube.com/playlist?list=PLUWqFDiirlsuYscECzks6zIZWr_Cfcx9k
-mixings for breakpoints used in main nav (28:40): https://www.youtube.com/watch?v=8w_kHIAkucA&list=PLUWqFDiirlsuYscECzks6zIZWr_Cfcx9k&index=1&t=1148s

Breadcrumbs. Needs to be added, probably into the nav section

Card print button. Needs styles for best printing experience

Need to add DST logo on card page

Features to add (someday)
-equivameds-like. provides print out of letter to their doctor when they provide an email (emails it to them) for supported drugs. Include price diff.
-create blog posts around saving money with alt drugs.
-blog posts should focus on drug savings and other topics not related to medical opinions
-cookies popup
-
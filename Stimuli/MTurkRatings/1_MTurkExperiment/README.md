# mb3-rules: Experiment details
The experiment was instantiated using jspsych with additional js modules for Amazon MTurk, hosted on Standford servers and deployed via MTurk. Unfortunately IP capture only captured server IP instead of remote user IP, but analysis of responses indicated sufficient heterogeneity of responses to include the final set.
Experiment programming: Mo
MTurk modules, deployment, data collection & standardization: George Kachergis 
$$: Mike Frank

Experiment (final version) summary
- participants with the same HIT as an earlier one were rejected (single participation per subject)
- participants heard /yu/ and were required to respond by typing what they heard. Failure to respond led to immediate termination of the study
- otherwise participants were informed:

In each of the following trials, you will hear one syllable. After you have heard the syllable, please indicate the <strong>identity</strong> of the perceived syllable, i.e., which syllable you think you heard,

You will then hear the syllable again once.

Then, please indicate how <strong>prototypical</strong> is the syllable of the pereived identity on a scale from 1 to 7

Press any key to begin.

- participants then heard a series of 22 trials with a random order of the syllables:
fa, fe, fu, ka, ke, ku, la, li, lo, ma, me, mu, ni, no, pa, pe, pu, si, so, ta, ti, to
- in each trial, Ss first hear the syllable. They could press the 'r' key to repeat the syllable as often as they pleased. Pressing any other key took them to the next screen where they could type the perceived identity of the syllable into a text box. When they hit Enter or clicked Next, they were shown a scale from 1...7, with 1 labeled (Poor example) and 7 labeled (Great example). Typing a number between 1 and 7 recorded their response and moved them to the next trial.

- At the end of the 22 trials, data was saved to a json file and data was subsequently retrieved for analysis to a csv file.
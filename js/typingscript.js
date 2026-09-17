const words = ["free"];
let i = 0;
let timer;

function typingEffect1() {
	let word = words[i].split("");
	var loopTyping = function() {
		if (word.length > 0) {
			document.getElementById('word').innerHTML += word.shift();
		} else {
			deletingEffect1();
			return false;
		};
		timer = setTimeout(loopTyping, 500);
	};
	loopTyping();
};

function deletingEffect1() {
	let word = words[i].split("");
	var loopDeleting = function() {
		if (word.length > 0) {
			word.pop();
			document.getElementById('word').innerHTML = word.join("");
		} else {
			if (words.length > (i + 1)) {
				i++;
			} else {
				i = 0;
			};
			typingEffect1();
			return false;
		};
		timer = setTimeout(loopDeleting, 200);
	};
	loopDeleting();
};

typingEffect1();

//---------------------------------------//



const wordsbtm = ["me"];
let a = 0;
let timerbtn;

function typingEffect() {
	let wordbtm = wordsbtm[a].split("");
	var loopTypingbtm = function() {
		if (wordbtm.length > 0) {
			document.getElementById('word2').innerHTML += wordbtm.shift();
		} else {
			deletingEffect();
			return false;
		};
		timerbtm = setTimeout(loopTypingbtm, 500);
	};
	loopTypingbtm();
};

function deletingEffect() {
	let wordbtm = wordsbtm[a].split("");
	var loopDeletingbtm = function() {
		if (wordbtm.length > 0) {
			wordbtm.pop();
			document.getElementById('word2').innerHTML = wordbtm.join("");
		} else {
			if (wordsbtm.length > (a + 1)) {
				a++;
			} else {
				a = 0;
			};
			typingEffect();
			return false;
		};
		timerbtm = setTimeout(loopDeletingbtm, 200);
	};
	loopDeletingbtm();
};

typingEffect();



//---------------------------------------------------------------------------------------
	
	
	
const wordsmid = ["free"];
let b = 0;
let timermid;

function typingEffectmid() {
	let wordmid = wordsmid[b].split("");
	var loopTypingmid = function() {
		if (wordmid.length > 0) {
			document.getElementById('word3').innerHTML += wordmid.shift();
		} else {
			deletingEffectmid();
			return false;
		};
		timermid = setTimeout(loopTypingmid, 500);
	};
	loopTypingmid();
};

function deletingEffectmid() {
	let wordmid = wordsmid[b].split("");
	var loopDeletingmid = function() {
		if (wordmid.length > 0) {
			wordmid.pop();
			document.getElementById('word3').innerHTML = wordmid.join("");
		} else {
			if (wordsmid.length > (b + 1)) {
				b++;
			} else {
				b = 0;
			};
			typingEffectmid();
			return false;
		};
		timermid = setTimeout(loopDeletingmid, 200);
	};
	loopDeletingmid();
};

typingEffectmid();



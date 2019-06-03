# -*- coding: utf-8 -*-
"""
Created on Fri May 10 02:39:09 2019

@author: Shaurya Gupta
"""

from nltk.corpus import wordnet as wn
from nltk.stem.wordnet import WordNetLemmatizer
from nltk import word_tokenize, pos_tag
from collections import defaultdict
import sys
tag_map = defaultdict(lambda : wn.NOUN)
tag_map['J'] = wn.ADJ
tag_map['V'] = wn.VERB
tag_map['R'] = wn.ADV

text = sys.argv[1]
tokens = word_tokenize(text)
lemma_function = WordNetLemmatizer()
for token, tag in pos_tag(tokens):
	lemma = lemma_function.lemmatize(token, tag_map[tag[0]])
	print(lemma+'\n')
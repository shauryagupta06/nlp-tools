# -*- coding: utf-8 -*-
"""
Created on Fri May 10 02:38:25 2019

@author: Shaurya Gupta
"""
import sys
from nltk.stem import PorterStemmer
from nltk.tokenize import sent_tokenize, word_tokenize
sentence= sys.argv[1]
words = word_tokenize(sentence)
ps = PorterStemmer()
for w in words:
	rootWord=ps.stem(w)
	print(rootWord+'\n')
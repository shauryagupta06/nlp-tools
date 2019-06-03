# -*- coding: utf-8 -*-
"""
Created on Thu May  9 21:31:39 2019

@author: Shaurya Gupta
"""

import nltk.classify.util
from nltk.classify import NaiveBayesClassifier
from nltk.corpus import names
import sys
import json 


def word_feats(words):
    return dict([(word, True) for word in words])
 
positive_vocab = [ 'awesome', 'outstanding', 'fantastic', 'terrific', 'good', 'nice', 'great', ':)' ]
negative_vocab = [ 'bad', 'terrible','useless', 'hate', ':(','horrible']
neutral_vocab = [ 'movie','the','sound','was','is','actors','did','know','words','not' ]

positive_features = [(word_feats(pos), 'pos') for pos in positive_vocab]
negative_features = [(word_feats(neg), 'neg') for neg in negative_vocab]
neutral_features = [(word_feats(neu), 'neu') for neu in neutral_vocab]

train_set = negative_features + positive_features + neutral_features

classifier = NaiveBayesClassifier.train(train_set) 

# Predict
neg = 0
pos = 0
sentence = sys.argv[1]
sentence = sentence.lower()
words = sentence.split(' ')
for word in words:
    classResult = classifier.classify( word_feats(word))
    if classResult == 'neg':
        neg = neg + 1
    if classResult == 'pos':
        pos = pos + 1
        
a = float(pos)/len(words)
b = float(neg)/len(words)
from decimal import Decimal

# First we take a float and convert it to a decimal
x = Decimal(a)
y = Decimal(b)
# Then we round it to 2 places
output1 = round(x,2)
output2 = round(y,2)


D = {'pos':float(output1), 'neg':float(output2) }

print (json.dumps(D))

"""print('Positive: ' + str(output1))
print('Negative: ' + str(output2))"""
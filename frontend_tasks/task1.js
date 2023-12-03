const PASS = 'Pass';
const FAIL = 'Fail';

const testCases = [
  {
    testInput: 'XXXXXYZXZXXXXZYXZZYZXXZXXXXXXXXXXXXXXXXXXXXXX',
    expectedOutput: 'XXXXXYZXZXXXXZXYZZYZXXZXXXXXXXXXXXXXXXXXXXXXX'
  },
  {
    testInput: 'ZZZZZZZXXXXZZZZZZZZZZZZZZZZZZZXXXXXZZZZZZZZYY',
    expectedOutput: 'ZZZZZZZXXXXZZZZZZZZZZZZZZZZZZZXXXXXZZZZZZZZX'
  },
  {
    testInput: 'YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYXX',
    expectedOutput: 'XXXXXXXXXXXXXXXXXXXXXXXXXX'
  },
  {
    testInput: 'YYYYZYZYZYZYZYZZZZYZYZYZYZYZZYZYYYZYZYXX',
    expectedOutput: 'XXZYZYZYZYZYZZZZYZYZYZYZYZZYZXYZYZXXY'
  },
  {
    testInput: 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZYYYYYYYYYYYYYYYYYYYYYZZZZX',
    expectedOutput: 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZXXXXXXXXXXYZZZZX'
  },
  {
    testInput: 'XXXXXYXYXZZZXZZXXZXZXZXZXZYZYZYZYYZZZZZZZZZXYYXZZZZZZZZZZZZZZZZZZZZZZXXXXX',
    expectedOutput: 'XXXXXXXXZZZXZZXXZXZXZXZXZYZYZYZXZZZZZZZZZXXXZZZZZZZZZZZZZZZZZZZZZZXXXXXXXXXXYZZZZX'
  },
  {
    testInput: 'XXXXXYXYXZZZXZZXXZXZXZXZXZYZYZYZYYZZZZZZZZZXYYXZZZZZZZZZZZZZZZZZZZZZZXXXXXXXXXXYZZZZX',
    expectedOutput: 'XXXXXXXXZZZXZZXXZXZXZXZXZYZYZYZXZZZZZZZZZXXXZZZZZZZZZZZZZZZZZZZZZZXXXXXXXXXXYZZZZX'
  },
  {
    testInput: 'YX',
    expectedOutput: 'XY'
  },
  {
    testInput: 'YY',
    expectedOutput: 'X'
  },
  {
    testInput: 'XXXYYYYYYYYYYYYYYYYYYYYYYYYYYYZZZZZZZZZZZZZZZZZZZYYYYYYYYYYYYZZZZZZZZZZZZZZZXXXXXXXXXXXXXXXXXXYYYYYYYYYYYYYYYXXXXYYYYYYYYYYYYYYYYXXXXXXXXXXXXXXYYXYXYXXXXXXXXXXXXXXXXXXXXXXXXXYYYXXXXXXXXXXXXXXYYZYZYZYZZZZZZZZZYZYZYZYZYXYXYXYXYZYYYYYYYYYYYYYYYXYXYXYXYZYYZXYXYYXZYYZZYZYYZX',
    expectedOutput: 'XXXXXXXXXXXXXXXXYZZZZZZZZZZZZZZZZZZZXXXXXXZZZZZZZZZZZZZZZXXXXXXXXXZZZZZZZXXXXXXXXXZZZZZZZXXXXXXXXXZZZZZZZXXXXXXXXXZZZZZZZXXXXXXXXXZZZZZZZXXXXXXXXXXXXXXXXXZYZYZYZZZZZZZZZYZYZYZYZXXXXXXYZXXXXXXXXXXXXXYZXZXXXXYZXZZYZXZX'
  }
];

function lexicographicallySmallest(input1) {
  if (!/^[XYZ]+$/.test(input1)) {
    throw "UnsupportedException lexicographicallySmallest(input1)";
  }

  let modified = true;
  let count = 0;
  const maxCount = input1.length;

  while (modified) {
    modified = false;

    if (count === maxCount) {
      break;
    }

    input1 = input1.replace(/X/g, 'YY');
    input1 = input1.replace(/YY/g, 'X');

    if (input1.includes('X') || input1.includes('YY')) {
      modified = true
    }

    count++;
  }

  return input1;
}

(function runTestCases() {
  return testCases.map((testCase) => {
    const output = lexicographicallySmallest(testCase?.testInput);

    const result = output === testCase?.expectedOutput ? PASS : FAIL;

    console.log(`${result} EXPECTED: ${testCase?.expectedOutput} RECEIVED: ${result}`);
  });
})();